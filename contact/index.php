<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/assets/head.php') ?>
<title>CONTACT | Official AIRUGS</title>
<link rel="stylesheet" href="contact.css">
</head>

<body>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/assets/header.php') ?>
    <main>
        <div class="card">
            <h2>Dear Guest, </h2>
            <p>Thank you for taking the time to reach out to us.</p>
            <p><b>Please Fill Out This Form.</b></p>
        </div>

        <form id='contact-form' name='contact-form' method="post" action='/contact/process_form.php'>
            <fieldset>
                <div class="flex mobile">
                    <div class="form-element half">
                        <label for='firstname'>Firstname</label>
                        <input name='firstname' type='text' placeholder="Firstname..." maxlength='32' pattern="^[A-Za-z]*$"></input>
                    </div>
                    <div class="form-element half">
                        <label for='lastname'>Lastname</label>
                        <input name='lastname' type='text' placeholder="Lastname..." maxlength='32' pattern="^[A-Za-z]*$"></input>
                    </div>
                </div>
                <div class="form-element full">
                    <label for='email'>Email<span> *</span></label>
                    <input name='email' type='email' placeholder="Email..." required></input>
                </div>
                <div class="form-element full">
                    <label for='interest'>Interest<span> *</span></label>
                    <select name='interest'>
                        <option value='Whitelist'>Get On White List</option>
                        <option value='Collab'>Collab</option>
                        <option value='Other'>Other</option>
                    </select>
                </div>
                <div class="form-element full">
                    <label for='message'>Message<span> *</span></label>
                    <textarea class="message" name="message" type='text' placeholder="Message" required maxlength="500" minlength="12"></textarea>
                </div>
                <button type='submit'>Submit</button>
            </fieldset>
        </form>
    </main>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/assets/footer.php') ?>

    <?php http_response_code(200); ?>