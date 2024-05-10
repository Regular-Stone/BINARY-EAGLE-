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

            input, select{
                font-size: 1.5rem;
                width: 35%;
                padding: 1rem;
                box-sizing: border-box;
                font-family: var(--content-font);
            }
            textarea {
                font-size: 1.5rem;
                padding: 1rem;
                box-sizing: border-box;
                width: 100%;
                font-family: var(--content-font);
            }
            button {
                padding: 1rem 2rem;
                background-color: var(--purple_color);
                color: #fff;
                border: var(--primary_text_color) 2px solid;
                cursor: pointer;
                width: 20%;
                margin: 0 auto;
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
    <h1>Contact</h1>
    <p>Vous pouvez nous contacter en remplissant le formulaire ci-dessous.</p>
    <form class="contact-form" action="post">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="subject">Sujet</label>
        <select id="subject" name="subject" required>
            <option value="question">Question</option>
            <option value="suggestion">Suggestion</option>
            <option value="autre">Autre</option>
            <!-- Option pour les rapports de bugs -->
            <option value="bug">Rapport de bug</option>
        </select>
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Envoyer</button>
    </form>
</div>