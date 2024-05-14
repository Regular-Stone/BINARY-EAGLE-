<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="main-content">
    <style>
        .main-content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 85vh;
            font-family: var(--content-font);


            h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            width: 50%;
            margin: 0 auto;

            label {
                font-size: 2.2rem;
            }

            span {
                color: red;
            }

            input, select{
                font-size: 1.5rem;
                width: 35%;
                padding: 1rem;
                box-sizing: border-box;
                font-family: var(--content-font);


                option {
                    background-color: #fefefe;
                    color : #000;

                    &:disabled {
                        background: #cecece;
                    }
                }
            }
            textarea {
                font-size: 1.5rem;
                padding: 1rem;
                box-sizing: border-box;
                width: 100%;
                font-family: var(--content-font);
            }

            .buttons {
                display: flex;
                align-items: center;
                justify-content: center;
                column-gap: 2rem;

                button{
                padding: 1rem 2rem;
                background-color: var(--purple_color);
                color: #fff;
                border: var(--primary_text_color) 2px solid;
                cursor: pointer;
                width: 20%;
                font-size: 2rem;
                font-weight: bold;
                transition: all 0.3s;

                &:hover {
                    background-color: var(--primary_text_color);
                    color: var(--purple_color);
                    font-weight: bold;
                    transform: scale(1.1);
                    }
                }
            }

            .g-recaptcha {
                margin: 0 auto;
            }


            #name, #email, #subject, select, option{
                border: 2px solid var(--another_purple);

            }

            #message {
                border: 2px solid var(--another_purple);
                height: 15rem;
                resize: none;
            }
        }
    }
    </style>
    <? if(isset($_GET['success'])): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Message envoyé avec succès',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <? endif; ?>

    <? if(isset($_GET['error']) && $_GET['error'] == 'missing_data'): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Veuillez remplir tous les champs.',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
<? endif; ?>
<? if(isset($_GET['error']) && $_GET['error'] == 'captcha'): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Veuillez cocher la case "Je ne suis pas un robot".',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
<? endif; ?>
<? if(isset($_GET['error']) && $_GET['error'] == 'data_invalid'): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Données invalides. Veuillez vérifier les informations saisies.',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
<? endif; ?>
    <h1>Contact</h1>
    <p>Vous pouvez nous contacter en remplissant le formulaire ci-dessous.</p>
    <form class="contact-form" method="post" action="contact/submit">
        <label for="name">Nom <span>*</span></label>
        <input type="text" id="name" name="name"  >
        <label for="email">Email <span>*</span></label>
        <input type="email" id="email" name="email"  >
        <label for="subject">Sujet <span>*</span></label>
        <select id="subject" name="subject"  >
            <option  selected disabled value="">Veuillez choisir une option</option>
            <option value="question">Question</option>
            <option value="suggestion">Suggestion</option>
            <option value="autre">Autre</option>
            <!-- Option pour les rapports de bugs -->
            <option value="bug">Rapport de bug</option>
        </select>
        <label for="message">Message <span>*</span></label>
        <textarea id="message" name="message"  ></textarea>
        <div class="g-recaptcha" data-sitekey="6LdFI9spAAAAAESu8Yn3Rpb4RnrbfVB3xQSGPZje" data-theme="dark"></div>
        <div class="buttons">
            <button type="submit">Envoyer</button>
            <button id="reset" type="reset">Annuler</button>
        </div>
    </form>
    <script  src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="module" src="/binary_back/public/scripts/contactForm.js"></script>
</div>