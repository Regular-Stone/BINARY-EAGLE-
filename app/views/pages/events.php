<style>


    .events {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        
        .event {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40vh;
            width: 70%;
            border-radius: 1rem;
            margin-top: 2.5%;
            padding: 2rem 0;

            &:nth-child(odd) {
                animation: slideInFromLeft 1s ease;
                border: 5px solid var(--purple_color);
                box-shadow: 0 0 20px var(--purple_color);
            }

            &:nth-child(even) {
                animation: slideInFromRight 1s ease;
                animation-fill-mode: backwards;
                border: 5px solid var(--another_purple);
                box-shadow: 0 0 20px var(--another_purple);
            }

            .event-img {
                
                width: 50%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding-left: 2rem;


                img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            }

            .event-info {
                width: 50%;
                height: 100%;
                box-sizing: border-box;
                position: relative;
                text-align: center;
                display: flex;
                flex-direction: column;


                h2 {
                    font-size: 3.5rem;
                    font-weight: bold;
                    margin: 2rem 0;
                    
                }

                p {
                    font-size: 2.3rem;
                    margin: 2rem 0; 
                }

                .steamer_game_list {
                    display: flex;
                    width: 100%;
                    color: white;

                    ul {
                        list-style: none;
                        padding: 0;
                        margin: 0;
                        width: 50%;
                        font-size: 2rem;

                        li {
                            margin: 1rem 0;
                            font-size: 1.8rem;
                        }
                    }
                }
            }
        
        }
    }
</style>

<div class="main-content">
    <div class="events">

        <!--  -->   
        <div class="event">
            <div class="event-img">
                <img src="/binary_back/public/imgs/loveEvent.png" alt="Event 3">
            </div>
            <div class="event-info">
                <h2>❤️ Loveleagle ❤️</h2>
                <p>Evement organisé pour la Saint Valentin </p>
                <div class="steamer_game_list">
                <ul>
                    🎦 Pseudos des streamers :
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                </ul>
                <ul>
                    🎮 Liste des jeux : 
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                </ul>
                </div>
            </div>
        </div>

        <!--  -->
        <div class="event">
            <div class="event-img">
                <img src="/binary_back/public/imgs/halloween.png" alt="Event 3">
            </div>
            <div class="event-info">
                <h2>🎃 HorrorEagle 🎃</h2>
                <p>Evement organisé pour Halloween</p>
                <div class="steamer_game_list">
                <ul>
                    🎦 Pseudos des streamers :
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                </ul>
                <ul>
                    🎮 Liste des jeux : 
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                </ul>
                </div>
            </div>
        </div>

        <!--  -->
        <div style="margin-bottom: 2.5%" class="event">
            <div class="event-img">
                <img src="/binary_back/public/imgs/paques.png" alt="Event 3">
            </div>
            <div class="event-info">
                <h2>🥚 Eggeagle 🥚</h2>
                <p>Evement organisé pour Paques</p>
                <div class="steamer_game_list">
                <ul>
                    🎦 Pseudos des streamers :
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                </ul>
                <ul>
                    🎮 Liste des jeux : 
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                    <li>Loveleagle</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>