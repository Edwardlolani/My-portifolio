<!DOCTYPE HTML>

<html>

<head>

<style type="text/css">
  *{
      font-family: Gill sans,sana-serif;

      padding: 0;
      margin: 0;
  }
  body{
      background:#1B98C5;
      text-transform: uppercase;

  }
  h1{
      text-align: center;

  }
  h3{
      margin: 5px;
  }
   .skills{
       width: 100px;
       margin: 60px auto;
       color: #fff;
       padding: 20px;
       box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),0 10px 10px rgba(0, 0, 0, 0.22);
   }
   .skills li{
       margin: 20px 0;
       padding:10px
   }
    .bar{
        background:#0034DE;
        display: block;
        height: 20px;
        border: 1px solid rgba(0, 0, 0, 0.3);
        border-radius:10px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12),0 1px 2px rgba(0, 0, 0, 0.24);
        transition:all 0.3s cubic-benzier(.25,.8,.25,1);
    }

    .bar:hover{
        box-shadow:0 14px 28px rgba(0, 0, 0, 0.25),0 10px 10px rgb(0, 0, 0, 0.22);
    }
     .bar span{
         height: 20px;
         float: left;
         background: linear-gradient(135deg, rgba(236, 0, 140, 1)0%,rgba(252, 103, 103, 1)100%);
     }
      .html{
        width:70%;
        animation:html 3s;

      }
       .Css{
        width:60%;
        animation:Css 3s;


      }
       .Javascript{
        width:50%;
        animation:Javascript 3s;

      }
      @keyframes html{
          0%{
              width: 0%;
          }
          100%{
              width: 65%;
          }

      }

      @keyframes CSS{
          0%{
              width: 0%;
          }
          100%{
              width: 60%;
          }

      }

      @keyframes Javascript {
          0%{
              width: 0%;
          }
          100%{
              width: 50%;
          }

      }

      .row::after{
    content: "";
    clear : both;
    display : table;
}
#second_div{
    float: left;
    width: 100%;
    table-layout: fixed;
    border-spacing: 20px;

}
.skill{
    display: table-cell;
    height: 100px;
    font-size:15px;
    background-color: #9AA0FF;
     width: 300px;
}
.technologies{
    display: table-cell;
    font-size:15px;
    background-color: #FFE1A8;
     width: 300px;


}
.tools{
    display: table-cell;
    font-size:15px;
    background-color: #4F7B7D;
    width: 300px;
    }

</style>
  <title>my-skills</title>
</head>

<body>
      <div>
       <h1>My skills</h1>
       <br>
         <!---atart skills,technologies,-->


       <li><h3>html</h3>
       <span class="bar"><span class="html"  style="width: 70%;"></span>65%</span>
       </li>

        <li><h3>Css</h3>
       <span class="bar"><span class="Css"></span>60%</span>
       </li>

        <li><h3>Javascript</h3>
       <span class="bar"><span class="Javascript"></span>50%</span>
       </li>
      </div>


    <div class ="row" id="second_div">
        <!--section for biography,skills and experience-->
        <div class="skill">

          <h2>skill</h2>
           <ul>
               <li>front-end coding</li>
              <li>testing and debugging</li>
              <li> problem solving</li>
               </ul>

        </div>

        <div class="technologies">

          <h2>technologies</h2>
           <ul>
               <li>HTML</li>
              <li>CSS</li>
              <li>Javascript</li>
              </ul>

        </div>

        <div class="tools">

           <h2>tools</h2>
              <ul>
               <li>GitHub</li>
              <li>Sublime Text</li>
              <li>HTMLPad</li>

               </ul>

        </div>
    </div>
         <!---end skills,technologies,-->

</body>

</html>