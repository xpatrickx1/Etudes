<?php include 'helpers/mail.php' ?>

<div class="contact-block">
    <div class="container">
        <form action="" class="contact-block__form contact-form" enctype="multipart/form-data" method="post">
            <div class="contact-form__group">
                <input type="email" id="contactMail" required name="contactMail" class="contact-form__input" placeholder="E-mail">
            </div>
            <div class="contact-form__group">
                <textarea name="contactMsg" id="contactMsg" required  class="contact-form__textarea" placeholder="Enter your message..."></textarea>
            </div>
            <div class="contact-form__group contact-form__files-field">
                <label for="contactFile" class="contact-form__files">
                   Attach file
                </label>
                <input class="contact-form__file-input" id="contactFile" name="contactFile" type="file" accept=".pdf, .zip, .rar, .odt, .odf, .gz, .gif, .jpg, .jpeg, .png, .txt, .rtf, .doc, .docx, .ppt, .pptx, .xls, .xlsx, .odp, .tar, .csv, .sav">
            </div>
            <button type="submit" class="button button--w100" name="pricesContactSend" id="pricesContactSend">Send email</button>
        </form>
    </div>
</div>