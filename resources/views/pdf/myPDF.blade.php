
<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<style>
    body {
        background-image: url("{{ public_path('dummy.jpg') }}");
      background-repeat: no-repeat;
  background-attachment: relative;
  /* background-size: cover; */
  background-size: 100% 100%;
    }

    div.fixed {
  position: fixed;
  bottom: 17%;
  right: 36%;
  width: 300px;
  /* border: 3px solid #73AD21; */
}
    </style>
<body>

    <div class="fixed"  >
        <h3 style="align-content: center;">Victor Ceaser Kwathu</h3>
        </div>
    {{-- <img src="{{ public_path('dummy.jpg') }}" style="width: 200px; height: 200px"> --}}
  
   
</body>
</html>