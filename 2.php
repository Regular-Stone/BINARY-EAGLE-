<html>
    <body>
    <header>
        <h1>Binary Eagle TV</h1>
        <p>Welcome to the Binary Eagle TV channel!</p>
    </header>
    <style>
            body {
                margin: 0;
                padding: 0;
                overflow: hidden;
            }
            header {
                background-color: #6441A4;
                color: white;
                height: 15vh;
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;

                h1 {
                    margin: 0;
                    height: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                p {
                    margin: 0;
                    height: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
            }
            #binary {
                width: 100%;
                height: 85%;

                iframe {
                    width: 100%;
                    height: 100%;
                }
            }
        </style>
    <!-- Add a placeholder for the Twitch embed -->
    <div id="binary"></div>

    <!-- Load the Twitch embed JavaScript file -->
    <script src="https://embed.twitch.tv/embed/v1.js"></script>

    <!-- Create a Twitch.Embed object that will render within the "twitch-embed" element -->
    <script type="text/javascript">
        new Twitch.Embed("binary", {
        channel: "binaryeagletv",
        // Only needed if this page is going to be embedded on other websites
        
        
        });
        </script>
    </body>
</html>