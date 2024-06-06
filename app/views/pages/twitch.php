<style>
    .main-content {
        height: 85vh;
        overflow-y: hidden;
        gap: 1.5rem;
        width: 100%;

        #twitch-embed {
            width: 100%;
            height: 100%;
        }
    }

</style>

<div class="main-content">

<div id="twitch-embed"></div>


<script src="https://embed.twitch.tv/embed/v1.js"></script>


<script type="text/javascript">
    new Twitch.Embed("twitch-embed", {
    width: "100%",
    height: "100%",
    channel: "binaryeagletv",
    });
</script>
</div>