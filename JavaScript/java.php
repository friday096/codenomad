<html>

<body>
    
    <input type="text" id="text" style="block">
    
    <button onclick="my_event()"> Click Me </button>
    
    
    <script>
    
    function my_event(){
        
    let x=document.getElementById('text').value;
        
    document.write(x);
}
    </script>
    
</body>
    
</html>