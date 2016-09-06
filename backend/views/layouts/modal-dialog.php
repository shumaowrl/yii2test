<script type="text/javascript">


    function myModal() {}
    myModal.prototype = {
        'type':'normal',
        title: '',
        url: '',
        html:'',
        width: '',
        height: '',
        loader: "<div class='overlay'><i class='fa fa-refresh fa-spin'></i></div>",
        iframe:"<iframe width='100%' height='500px' frameborder='0' id='iframe'>加载中...</iframe>",
        modal: function () {
            $('.modal-title').html(this.title);
            $('#myModal').modal();
            if(this.type=='normal'){
                $(".modal-body").html(this.loader);
                $(".modal-body").load(this.url);
            }else if(this.type=='iframe'){
                $(".modal-body").html(this.iframe);
                if(this.height){
                    $("#iframe").attr("height",this.height);
                }
                $("#iframe").attr("src",this.url);
            }else if(this.type=='html'){
                $(".modal-body").html(this.html);
            }
            $("#myModal").children("div").css("width", this.width);
        }
    };
</script>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" 
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    模态框（Modal）标题
                </h4>
            </div>
            <div class="modal-body">
                在这里添加一些文本
            </div>
             
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
