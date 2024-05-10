<style>
    .main-content {
        height: 85vh;
        gap: 1.5rem;
        width: 100%;

        #twitch-embed {
            width: 100%;
            height: 100%;
        }
    }

</style>

<div class="main-content">
    <!-- Add a placeholder for the Twitch embed -->
<div id="twitch-embed"></div>

<!-- Load the Twitch embed JavaScript file -->
<script src="https://embed.twitch.tv/embed/v1.js"></script>

<!-- Create a Twitch.Embed object that will render within the "twitch-embed" element -->
<script type="text/javascript">
    new Twitch.Embed("twitch-embed", {
    width: "100%",
    height: "100%",
    channel: "binaryeagletv",
    });
</script>
</div>