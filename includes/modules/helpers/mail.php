<?php
if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['pricesContactSend']))  {

    //name полей с формы
    $fields = array(
        'contactMail',
        'contactMsg'
    );

    //cleaning data from form inputs
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $posted[$field] = trim($_POST[$field]);
            $posted[$field] = stripslashes($posted[$field]);
            $posted[$field] = strip_tags($posted[$field]);
            $posted[$field] = htmlspecialchars($posted[$field]);
        }
        else $posted[$field] = '';
    }

    if ( ! function_exists( 'wp_handle_upload' ) ) {
        require_once(ABSPATH . 'wp-admin/includes/file.php');
    }

    $headers = 'From: '.' <'.$posted['contactMail'].'>' . "\r\n";

    $uploadedfile = $_FILES['contactFile']; //name инпута с файлом

    $attachments = array(''); // пустой attachments если файл не пройдет проверку

    if(isset($uploadedfile)){
        $allowed =  array('pdf', 'zip', 'rar', 'odt', 'odf', 'gz', 'gif', 'jpg', 'jpeg', 'png', 'txt', 'rtf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx', 'odp', 'tar', 'csv', 'sav');
        $ext = pathinfo($uploadedfile['name'], PATHINFO_EXTENSION);

        define('MB', 1048576);
        //файл будет прикреплен только если его тип разрешен в массиве $allowed
        // и размер меньше 5мб
        if(in_array($ext, $allowed) && $uploadedfile['size'] < 5 * MB){
            $upload_overrides = array( 'test_form' => false );

            //для того чтоб прикрепить файл к письму, его нужно загрузить на сервер
            $movefile = wp_handle_upload( $uploadedfile, $upload_overrides);

            //запись пути файла в $attachments после успешной загрузки на сервер
            if ( $movefile && ! isset( $movefile['error'] ) ) {
                $attachments = array($movefile['file'] );
            }
        }
    }

    if(wp_mail('yourmail@mail.com', 'Email Contact US', $posted['contactMsg'], $headers, $attachments)){
        header("Location: /contact-us?success");
        unlink( $movefile['file'] ); //удаление файла с сервера
        exit;
    } else{
        header("Location: /contact-us?error");
        unlink( $movefile['file'] );
        exit;
    }
}
?>