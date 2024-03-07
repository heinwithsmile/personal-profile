<script>
    function clearForm(event) {
        var formElements = document.getElementById("registrationForm").elements;
        for (var i = 0; i < formElements.length; i++) {
            if (formElements[i].type !== "button" && formElements[i].type !== "submit") {
                formElements[i].value = "";
            }
        }
        event.preventDefault();
    }
</script>
</body>

</html>