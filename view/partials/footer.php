<script>
    const toShow = document.querySelector("#showQuestion");
    const toShowId = toShow.dataset.id;
    toShow.addEventListener("click", e=>{
        e.preventDefault();
        const anchor = document.createElement("a");
        if(! (e.target.tagName === "SPAN" || e.target.tagName === "A" || e.target.tagName === "IMG")){
            window.location.replace(`profile/questions?id=${toShowId}`);
        }
    })
</script>
</body>
</html>