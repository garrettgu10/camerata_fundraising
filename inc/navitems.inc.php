<li <?php if(strcmp(basename($_SERVER["REQUEST_URI"], ".php"),"index")==0 || strcmp(substr($_SERVER["REQUEST_URI"],-1),"/")==0) echo "class=\"active\""?>><a href="index.php">Home</a></li>
<li <?php if(strcmp(basename($_SERVER["REQUEST_URI"], ".php"),"performers")==0) echo "class=\"active\""?>><a href="performers.php">Performers</a></li>
<li <?php if(strcmp(basename($_SERVER["REQUEST_URI"], ".php"),"concerts")==0) echo "class=\"active\""?>><a href="concerts.php">Concerts</a></li>
<li <?php if(strcmp(basename($_SERVER["REQUEST_URI"], ".php"),"contact")==0) echo "class=\"active\""?>><a href="contact.php">Contact</a></li>

<a class="waves-effect waves-light btn light-blue darken-2" href="https://secure.squarespace.com/commerce/donate?donatePageId=57e4804403596e09f4bd0b36">donate</a>
