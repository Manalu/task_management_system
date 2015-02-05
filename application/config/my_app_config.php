<?php
$config['admin_menu'] = array(
    "خانه" => array("address" => "admin/dashboard" ,
         "icon" =>"glyphicon glyphicon-home" ,
         "active" =>FALSE) ,
    "ساختار شرکت" => array("address" => "admin/dashboard" ,
         "icon" =>"glyphicon glyphicon-user" ,
         "active" =>FALSE ,
         "submenu" => array(
             "اضافه کردن کارمند" => array("address" => "admin/dash_user/add_user" ,
                 "icon" =>"glyphicon glyphicon-user" ,
                 "active" =>FALSE ) ,
             "اضافه کردن گروه" => array("address" => "admin/dash_group/add_group" ,
                 "icon" =>"glyphicon glyphicon-user" ,
                 "active" =>FALSE ) ,
             "انتصاب شخص به گروه" => array("address" => "admin/dash_group/add_employee" ,
                 "icon" =>"glyphicon glyphicon-user" ,
                 "active" =>FALSE ) ,
             "ساختار درختی شرکت" => array("address" => "admin/dash_parent/add_parent" ,
                 "icon" =>"glyphicon glyphicon-user" ,
                 "active" =>FALSE )
              
          )) ,
    "وظیفه" => array("address" => "admin/dashboard" ,
         "icon" =>"glyphicon glyphicon-tasks" ,
         "active" =>FALSE) ,
    "یادآوری" => array("address" => "admin/dashboard" ,
         "icon" =>"glyphicon glyphicon-bullhorn" ,
         "active" =>FALSE ,
         "submenu" => array(
             "اضافه کردن یادآوری" => array("address" => "admin/dash_reminder/add_reminder" ,
                 "icon" =>"glyphicon glyphicon-bullhorn" ,
                 "active" =>FALSE) ,
             "یادآوری های انجام شده" => array("address" => "admin/dashboard" ,
                 "icon" =>"glyphicon glyphicon-bullhorn" ,
                 "active" =>FALSE) ,
             "یادآوری های مربوط به خود" => array("address" => "admin/dashboard" ,
                 "icon" =>"glyphicon glyphicon-bullhorn" ,
                 "active" =>FALSE) ,
         )
    ) 
   );