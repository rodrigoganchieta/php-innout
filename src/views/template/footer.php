<footer class="footer">
  <span>Desenvolvido com</span>
  <span><i class="icofont-heart text-danger mx-1"></i></span>
  <span>por COD<span class="text-danger">3</span>R</span>&nbsp;
  <a href="https://github.com/rodrigoganchieta" target="_blank"><i class="devicon-github-original"></i> RODRIGOGANCHIETA</a>
</footer>
<script src="assets/js/app.js"></script>
<script>
      function sair() {
        var result;
        var r = confirm("Deseja sair do sistema?");
        if (r == true) {
          window.location.href = "logout.php";
        }
        document.getElementById("conf").innerHTML = result;
      }
  </script>
</body>
</html>
