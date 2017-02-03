<!DOCTYPE html>
<html>
<head></head>
<body>
<div id="container">
    <article id="articleBlock">
        <header>
        </header>
        <form action="" method="POST">
            <label for="formShow">Number Of Forms To Show</label>
            <select autofocus name="formShow" id="formShow" required size="1">
                <option value="one">1</option>
                <option value="two">2</option>
                <option value="three">3</option>
            </select>
            <div class="postForms">
                <label>Editor's Notes</label><textarea id="editorNotes"></textarea>
                <label>Title</label><input type="text" id="postTitle" required>
                <label>Post Link</label><input type="url" id="postLink" required>
                <label>Image Source</label><input type="url" id="postImageSrc" required>
                <label>Blurb</label><input type="text" id="postBlurb" required>
            </div>
            <input type="submit" name="submit" value="Submit" onclick="pigeonClap()">
        </form>
        <div id="infoReveal"></div>
    </article>
</div>
<script>
    function pigeonClap(){
        var xhr = new XMLHttpRequest();

        var url = "http://jayfarand.com/codeOWL/pigeonClap.php";
        var postTitle = document.getElementById("postTitle").value,
            postLink = document.getElementById("postLink").value,
            postImageSrc = document.getElementById("postImageSrc").value,
            postBlurb = document.getElementById("postBlurb").value,
            editorNotes = document.getElementById("editorNotes").value;
        var data = "editorNotes="+editorNotes+"&postTitle="+postTitle+"&postLink="+postLink+"&postImageSrc="+postImageSrc+"&postBlurb="+postBlurb;
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        // Access the onreadystatechange event for the XMLHttpRequest object
        xhr.onreadystatechange = function() {
            if(xhr.readyState == 4 && xhr.status == 200) {
                var return_data = xhr.responseText;
                document.getElementById("infoReveal").innerHTML = return_data;
            }
        }
        // Send the data to PHP now... and wait for response to update the status div
        xhr.send(data); // Actually execute the request
        document.getElementById("infoReveal").innerHTML = "processing...";
    }

</script>
</body>
</html>
