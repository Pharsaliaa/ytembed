{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('inputEmbed')}}" method="POST">
        @csrf
        <input type="text" name="link" id="link" placeholder="Embed Url">
        <input type="text" name="jml" id="jml" placeholder="Many Vids">
        <input type="submit" value="Gow">
    </form>
</body>
</html> --}}

<!DOCTYPE html>
    <html>
        <body>
            <p>Enter Youtube Video ID: </p>
            <input type="text" id="videoUrl" placeholder="Youtube Video ID ex: 2yYts3PME1o" style="width: 400px;">
            <input type="text" id="manyLoop" placeholder="Many Loop ( Disabled due to development )" style="width: 400px;" disabled>
            <p>How to find Video ID? </p>
            <p>1. Open Youtube Video</p>
            <p>2. Copy the video ID from the URL</p>
            <p>3. Example link: https://www.youtube.com/watch?v=8oE5Z2GLhNc , copy the video ID after v=, so the video ID is 8oE5Z2GLhNc</p>
            <p>3. Paste the video ID into the input box above</p>
            <p>4. Click the button below</p>
            <div style="margin-bottom: 20px">
                <button onclick="showVideo()">Check</button>
            </div>
            <iframe id="myFrame" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame1" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame2" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame3" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame4" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame5" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame6" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame7" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame8" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame9" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame10" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame11" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame12" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame13" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame14" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame15" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame16" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame17" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame18" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame19" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame20" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>
            <iframe id="myFrame21" width="120" height="70" frameborder="0" allowfullscreen>
            </iframe>

        <script>
            function showVideo() {
                var videoUrl = "http://www.youtube.com/embed/" + document.getElementById("videoUrl").value + "?autoplay=1";
                document.getElementById("myFrame").src = videoUrl
                document.getElementById("myFrame1").src = videoUrl
                document.getElementById("myFrame2").src = videoUrl
                document.getElementById("myFrame3").src = videoUrl
                document.getElementById("myFrame4").src = videoUrl
                document.getElementById("myFrame5").src = videoUrl
                document.getElementById("myFrame6").src = videoUrl
                document.getElementById("myFrame7").src = videoUrl
                document.getElementById("myFrame8").src = videoUrl
                document.getElementById("myFrame9").src = videoUrl
                document.getElementById("myFrame10").src = videoUrl
                document.getElementById("myFrame11").src = videoUrl
                document.getElementById("myFrame12").src = videoUrl
                document.getElementById("myFrame13").src = videoUrl
                document.getElementById("myFrame14").src = videoUrl
                document.getElementById("myFrame15").src = videoUrl
                document.getElementById("myFrame16").src = videoUrl
                document.getElementById("myFrame17").src = videoUrl
                document.getElementById("myFrame18").src = videoUrl
                document.getElementById("myFrame19").src = videoUrl
                document.getElementById("myFrame20").src = videoUrl
                document.getElementById("myFrame21").src = videoUrl
            }

        </script>
    </body>
</html>
