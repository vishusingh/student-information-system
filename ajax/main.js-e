$.ajaxSetup ({
    cache: false
});

var ajax_load = "<img class='loader' src='images/loader.gif' alt = 'loading....' />";
$(document).ready(function() {
    $("#left_col").load("ajax/topstu.php");
    var s=1;
    
    //The search selectors - UI
    $("#s_name").click(function(){
        s = 1;
        $("#search li ul").css('visibility', 'hidden');
        $("#search_btn").attr("src","images/btn_search_name.png");
    });
    
    $("#s_roll").click(function(){
        s = 2;
        $("#search li ul").css('visibility', 'hidden');
        $("#search_btn").attr("src","images/btn_search_roll.png");
    });
    
    $("#search_btn").hover(function(){
        $("#search li ul").css('visibility', 'visible');
    }, function(){
       // $("#search li ul").css('visibility', 'hidden');
    }); 
    
    $("#submenu").hover(function(){}, function(){
        $(this).css('visibility', 'hidden');
    });

    //The search function    
    $("#go").click(function(){
        //alert("GO!");
        var searchString = $("#search_box").attr('value');
        var dataString = 'n=' + searchString + '&s=' + s;
        //alert(dataString);
        //alert(s);
        $.ajax({
            type: "POST",
            url: "ajax/search.php",
            data: dataString,
            success: function(data){
                $("#content").html(data);
                $("#right_col h4").after("<a href='index.php' class='back_btn'>Home</a>");
            }            
        });
        return false;        
    });
    
    $("#search_box").focus(function(){
        $(this).attr('value', '');
    });
    
    $("#search_box").blur(function(){
        if($(this).attr('value') == ''){
            $(this).attr('value', 'Search..');
        };
    });
    
    $("#marks_form").submit(function(){
       alert ("Record saved");
       //$("#content").html(ajax_load).load("fill.php");

    });
    
    //Branchwise data loading functions -- AJAX - Vishu
    $("a.load-cs").click(function(){
        $("#content").html(ajax_load).load("ajax/student.php?n=1");
        $("#right_col h4").html("CS Students: ");
        $("#right_col h4").after("<a href='index.php' class='back_btn'>Home</a>");
    });
    
    $("a.load-ec").click(function(){
        $("#content").html(ajax_load).load("ajax/student.php?n=2");
        $("#right_col h4").html("EC Students: ");
        $("#right_col h4").after("<a href='index.php' class='back_btn'>Home</a>");
    });
    
    $("a.load-it").click(function(){
        $("#content").html(ajax_load).load("ajax/student.php?n=3");
        $("#right_col h4").html("IT Students: ");
        $("#right_col h4").after("<a href='index.php' class='back_btn'>Home</a>");
    });
    
    $("a.load-me").click(function(){
        $("#content").html(ajax_load).load("ajax/student.php?n=4");
        $("#right_col h4").html("ME Students: ");
        $("#right_col h4").after("<a href='index.php' class='back_btn'>Home</a>");
    });
    
    $("a.load-en").click(function(){
        $("#content").html(ajax_load).load("ajax/student.php?n=5");
        $("#right_col h4").html("EN Students: ");
        $("#right_col h4").after("<a href='index.php' class='back_btn'>Home</a>");
    });
    
    //To load student's marks statement 
    $("a.click-me").click(function(){
        var id = this.id;
        $("#content").html(ajax_load).load("ajax/marks.php?id=" + id);
        $("#right_col h4").after("<a href='index.php' class='back_btn'>Home</a>"); 
    });
    
    //To load student profile
    $("a.profile-load").click(function(){
        //alert("profile to be loaded");
        var id = this.id;
        $("#content").html(ajax_load).load("ajax/profile.php?id=" + id);
        $("#right_col h4").after("<a href='index.php' class='back_btn'>Home</a>");
    });
    
    //The edit form function call 
    $("a.edit-me").click(function(){
        var id = this.id;
        $("#content").html(ajax_load).load("ajax/edit.php?id=" + id + "&d=0");
        $("#right_col h4").html(""); 
    });
    
    
    //Input form validation
    
    //${"#marks_form"}.submit();
    $("#fname").blur(function(){
        //alert("blurred the name box!");
        if($("#fname").val().length < 4){
            $("#nameError").text("Atleast 4 letters please!");
            $("#nameError").addClass("error");  
            $("#marks_inp").attr("disabled", true);  
            var a = 1;        
        }
        else {
            $("#nameError").text(""); 
            $("#marks_inp").attr("disabled", false);                                
        }
    });
            
    $("#edit_form").submit(function(){
        //$("#content").html("<div class='edit'><img src='images/edited.png' alt='' /><p>&nbsp;Record edited</p></div>");
        //$(".edit").show(2000);
        //$("#dialog").dialog('open');
         alert ("Record has been edited!");
    });
    
    //To delete a record 
    $("a.del-me").click(function(){
        var r=confirm("Are you sure?");
        if(r==true)
        {
            var id = this.id;       
            $.get("ajax/edit.php?id=" + id + "&d=1");
            $("#content").html("<p>Record deleted</p>");
        }        
    });
    
    //marks input slides
    $(".slideshow").cycle({
        fx: 'scrollHorz',
        timeout: 0,
        next: '#next',
        prev: '#prev',
        speed: 100
    });
});
