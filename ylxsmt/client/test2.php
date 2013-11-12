 

<!DOCTYPE html>
<html>
    <head>
        <title>bootstrap学习 by 司徒正美</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">

        <link rel="stylesheet" href="http://files.cnblogs.com/rubylouvre/bootstrap.css"/> 
        <script src="http://files.cnblogs.com/rubylouvre/jquery1.83.js" > </script>
        <script src="http://files.cnblogs.com/rubylouvre/bootstrap-transition.js"></script>
        <script src="http://files.cnblogs.com/rubylouvre/bootstrap-modal.js"></script>
        <script src="http://files.cnblogs.com/rubylouvre/bootstrap-button.js"></script>


        <script>
            $(function(){
                $("#static").modal();
                
 
                $('#myModal').on('show', function () {
                    
                })
              
                $('#myModal').on('hide', function () {
                    
                })
               
            })
             
        </script>
    </head>
    <body>
        <p>静态</p>
        <div class="bs-docs-example" style="background-color: #f5f5f5;">
            <div id="static" class="modal" style="position: relative; top: auto; left: auto; right: auto; margin: 0 auto 20px; z-index: 1; max-width: 100%;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3>Modal header</h3>
                </div>
                <div class="modal-body">
                    <p>One fine body…</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Close</a>
                    <a href="#" class="btn btn-primary">Save changes</a>
                </div>
            </div>
        </div>
        <p>动态</p>
        <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Modal header</h3>
            </div>
            <div class="modal-body">
                <p>弹出层…</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </body>
</html>
