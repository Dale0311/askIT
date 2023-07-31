<script>

    // next update: if we revisit the page it shouldn't load the previous comment.
    const reply = document.querySelector("#reply");
    reply.addEventListener("keyup", e=>{
        e.preventDefault();
        $replyBtn = document.querySelector("#replyBtn");
        if(e.target.value.trim().length > 0){
            $replyBtn.removeAttribute("disabled");
        }else{
            $replyBtn.setAttribute("disabled", "disabled");
        }
    })

</script>
</body>
</html>