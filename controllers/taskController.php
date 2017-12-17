<?php
//each page extends controller and the index.php?page=tasks causes the controller to be called
class controlTask extends corecontroller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('showtask', $record);
    }
    //to call the show function the url is index.php?page=task&action=list_task
    public static function all()
    {
        //$records = todos::findAll();
        session_start();
           if(key_exists('uid',$_SESSION)) {
               $uid = $_SESSION['uid'];
           } else {
               header("Location: index.php?page=homepage&action=show");
           }
        $uid = $_SESSION['uid'];
        $records = todos::findTasksbyID($uid);
        
        self::getTemplate('alltasks', $records);
    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks
    //you should check the notes on the project posted in moodle for how to use active record here
    public static function create()
    {   
        session_start();
        if(key_exists('uid',$_SESSION)) {
            $uid = $_SESSION['uid'];
        } else {
            header("Location: index.php?page=homepage&action=show");
        }
        $uid = $_SESSION['uid'];
        echo $uid;
        print_r($_POST);
        self::getTemplate('edittask');
    }
    
    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edittask', $record);
    }
    //this would be for the post for sending the task edit form
    public static function store()
    {
        print_r($_POST);
        session_start();
        if(key_exists('uid',$_SESSION)) {
            $userID = $_SESSION['uid'];
        } else {
            header("Location: index.php?page=homepage&action=show");
        }
        $uid = $_SESSION['uid'];
        if(isset($_REQUEST['id']) == 1){
            $record = todos::findOne($_REQUEST['id']);
        }
        else {
            $record = new todo();
        }
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->ownerid = $userID;
        $record->owneremail = accounts::getEmail($userID);
        echo $record->owneremail;
        echo $record->createddate;
        $record->save();
        header("Location: index.php?page=tasks&action=all");
    }
    public static function save() {
        session_start();
        $task = new todo();
        $task->body = $_POST['body'];
        $task->ownerid = $_SESSION['userID'];
        $task->save();
    }
    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        print_r($_POST);
        header("Location: index.php?page=tasks&action=all");
    }
}