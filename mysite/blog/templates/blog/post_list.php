<html>
{% load staticfiles %}
    <head>
        <meta charset="utf-8">
        <title>ECE5990</title>
        <link type="text/css" rel="stylesheet" href="{% static 'blog/post_css.css' %}">
    </head>
    
    <body>
        <div id="wrapper">
                <a href="#"><header id="ropet">E C E 5 9 9 0</header></a>
                
                <h1>RoPet</h1>
                
                <div id="content">
                    <div id="text1">
                        <div class = "intro">
                            Would like to watch your dog remotely? 
                        </div>
                        <div class = "intro">
                            Join with RoPet and have fun!
                        </div>
                    </div>
                    
                    <div id = "control">
                        <h2>&#10048;    Control Panel</h2>
                        <div id="video">
                    		<video id="video" controls width="512" height="288"
                        		poster="{% static 'blog/images/pi.png' %}">
                        	</video>
			</div>
			<div id="control_icon">
                            <div id = "first">
                                <button type="button" id = "forward" class = "idle" onclick = "forward();">&#8679;</button>
                                <button type="button" id = "up" class = "idle" onclick="up();">&and;</button>
                            </div>
                            <div id="second">
                                <button type="button" id = "left" class = "idle" onclick="left();">&#8678;</button>
                                <button type="button" id = "stop" class = "idle" onclick="stop();">| |</button>
                                <button type="button" id = "right" class = "idle" onclick="right();">&#8680;</button>
                            </div>
                            <div id="thrid">
                                <button type="button" id = "backward" class = "idle" onclick="backward();">&#8681;</button>
                                <button type="button" id = "down" class = "idle" onclick="down();">&or;</button>
                            </div>
                            <div id="fourth">
                                <button type="button" id = "start" class = "idle" onclick="start();">&#8634;</button>
                                <button type="button" id = "quit" class = "idle" onclick="quit();">&#9635;</button> 
                            </div>
                        </div>  
                    </div>

                    <div>
                        <p>Want to watch your pet? </p>
                        <p>click <a href="10.148.11.168:8000">here</a></p>
                    </div>
		    <?php 
                        $last = exec('ls', $o, $r);
                        if ($r != 0)
                        {
                            print 'Error running command';
                            exit($r);
                        }
                        else
                            print implode("\n", $o);
                    ?>
                    <div>
                        {{message}}
                    </div>
                </div>

            </form>
        </div>
    <script src="{% static 'blog/my_js.js' %}"></script>
    </body>
	
    
</html> 

