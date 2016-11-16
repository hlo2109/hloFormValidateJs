# hloFormValidateJs

## Script

    <script type="text/javascript">
        $(function(){
          $("#example").hloFormValidateJs({
            "style":"top:0px; right:20px; background:#D32F2F; color:#fff; font-size:12px",
            "textEmail":"Email requerido",
            "textNormal":"Campo requerido",
            "mintextarea":50,
            "textTextarea":"No se permiten menos de 50 caracteres.",
            "textPassword":"Mínimo 6 caracteres",
            "expPassword":(/^[a-zA-Z0-9!@#$%^&*]{6,16}$/),
            "textNumber":"Solo números",
            "textText":"Solo texto"
          })
        })
      </script>
