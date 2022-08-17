<?php
$root = '../'; // $_SEVER['DOCUMENT_ROOT'];
include_once($root . 'includes/assets/head.php') ?>
<title>Official AIRUGS</title>
<link rel="stylesheet" href="/contact/contact.css">
</head>

<body>
    <?php include_once($root . 'includes/assets/header.php') ?>
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
                        <label for='firstname'>Firstname<span> *</span></label>
                        <input name='firstname' type='text' placeholder="Firstname..." required></input>
                    </div>
                    <div class="form-element half">
                        <label for='lastname'>Lastname<span> *</span></label>
                        <input name='lastname' type='text' placeholder="Lastname..." required></input>
                    </div>
                </div>
                <div class="form-element full">
                    <label for='email'>Email<span> *</span></label>
                    <input name='email' type='email' placeholder="Email..." required></input>
                </div>
                <div class="form-element full">
                    <label for='interest'>Interest<span> *</span></label>
                    <select name='interest'>
                        <option value='whitelist'>Get On White List</option>
                        <option value='collab'>Collab</option>
                        <option value='other'>Other</option>
                    </select>
                </div>
                <div class="form-element full">
                    <label for='message'>Message<span> *</span></label>
                    <textarea class="message" name="message" type='text' placeholder="Message" required></textarea>
                </div>
                <button type='submit'>Submit</button>
            </fieldset>
        </form>
    </main>
    <?php include_once($root . 'includes/assets/footer.php') ?>