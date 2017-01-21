<?php
    $statistics = array(
        'lcs' => array(
            'filePath' => $_POST['lcsFilePath'],
            'comments' => $_POST['lcsComments'],
            'commentContent' => $_POST['lcsCommentContent']
        ),
        'opr' => array(
            'filePath' => $_POST['oprFilePath'],
            'comments' => $_POST['oprComments'],
            'commentContent' => $_POST['oprCommentContent']
        ),

    );

    $query = "INSERT INTO facebook-engagement";
    $query .= "()"
    echo $statistics['lcs']['filePath'];

//    TODO Complete facebook engaement details  to  database.

