<!-- Formulaire de connexion pour un admin sans utiliser bootstrap -->

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
            align-items: center;

            gap: 1.5rem;
            width: 50%;
            margin: 0 auto;

            label {
                font-size: 2.2rem;
            }

            span {
                color: red;
            }

            input{
                font-size: 1.5rem;
                width: 35%;
                padding: 1rem;
                box-sizing: border-box;
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
                width: 60%;
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

            #username, #password{
                border: 2px solid var(--another_purple);

            }
        }
    }
    </style>
    <h1>Connexion administrateur</h1>
    <form class="contact-form" action="/binary_back/admin/auth" method="POST">
        <label for="username">Nom d'utilisateur <span>*</span></label>
        <input type="text" id="username" name="username" required>
        <label for="password">Mot de passe <span>*</span></label>
        <input type="password" id="password" name="password" required>
        <div class="buttons">
            <button type="submit">Connexion</button>
            <button type="reset">Effacer</button>
        </div>
    </form>
</div>
