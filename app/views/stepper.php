<?php
include "include/head.php";
include "include/nav.php";

?>
    <section id="stepper">
        <div class="stepper container">
            <form action="#" class="form" id="form">
                <h1 class="text-center">شراء المنتجات</h1>
                <!-- Progress bar  -->
                <div class="progressbar">
                    <div class="progress" id="progress"></div>
                    <div class="progress-step progress-step-active" data-title="Intro"></div>
                    <div class="progress-step" data-title="Content"></div>
                    <div class="progress-step" data-title="Card"></div>
                    <div class="progress-step" data-title="Location"></div>
                </div>
                <!-- Steps  -->
                <div class="form-step form-step-active">
                    <div class="input-group control">
                        <label for="fristname">اسم الاول</label>
                        <input type="text" name="fristname" class="fristname">
                        <p id="next"></p>
                    </div>
                    <div class="input-group control">
                        <label for="lastname">الاسم الاخير</label>
                        <input type="text" name="lastname" class="lastname">
                        
                    </div>
                    <div class="">
                        <a href="#"id="btn-us" class="btn btn-next width-50 ml-auto">التالي</a>
                    </div>
                    
                </div>
                <div class="form-step">
                    <div class="input-group control">
                        <label for="phone">رقم الجوال</label>
                        <input type="text" name="phone" id="phone">
                    </div>
                    <div class="input-group control">
                        <label for="email">البريد الالكتروني</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="btns-group">
                        <a href="#" class="btn btn-prev">السابق</a>
                        <a href="#" class="btn btn-next">التالي</a>
                        
                    </div>
                </div>
                <div class="form-step">
                    <div class="input-group control">
                        <label for="cardname">نوع البطاقة </label>
                        <input type="text" name="cardname" id="cardname">
                    </div>
                    <div class="input-group control">
                        <label for="cardnum">رقم البطاقة</label>
                        <input type="email" name="cardnum" id="cardnum">
                    </div>
                    <div class="btns-group">
                        <a href="#" class="btn btn-prev">السابق</a>
                        <a href="#" class="btn btn-next">التالي</a>
                        
                    </div>
                </div>
                <div class="form-step">
                    <div class="input-group control">
                        <label for="location1">الموقع الاول </label>
                        <input type="text" name="location1" id="location1">
                    </div>
                    <div class="input-group control">
                        <label for="location2">الموقع الثاني</label>
                        <input type="email" name="location2" id="location2">
                    </div>
                    <div class="btns-group">
                        
                        <button value="ارسال" class="btn">ارسال</button>
                        <a href="#" class="btn btn-prev">السابق</a>
                    </div>

                </div>
                
            </form>
        </div>
    </section>
    <script>
        const firstname = document.querySelector(".fristname").value;
        const lastname = document.querySelector(".lastname").value;
        const prevBtns = document.querySelectorAll(".btn-prev");
        const nextBtns = document.querySelectorAll(".btn-next");
        const progress = document.getElementById("progress");
        const formSteps = document.querySelectorAll(".form-step");
        const progressStep = document.querySelectorAll(".progress-step");
        const allTab = document.querySelectorAll(".control");
        let formStepsNum =0;
        let j=0;
        
        
        nextBtns.forEach((btn) => {
            
            btn.addEventListener("click", () => {
                
                
                
                
                for(let i = 0; i < j.length; i++){
                    
                    if(firstname[i] == '' && lastname[i] ==''){
                        
                    allCheck[i].style.borderColor = "red";
                    return false;
                    
                    }else{
                        allCheck[i].style.borderColor = "green"; 
                    }
                    j+=1;
                    
                    // updateFormSteps();
                    // updateProgress();
                }
                        
                formStepsNum++
                        updateFormSteps();
                        updateProgress(); 
            });
            
        });
        prevBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum-=1;
                updateFormSteps();
                updateProgress();
            });
        });


        function updateFormSteps(){
            formSteps.forEach((formStep) => {
                formStep.classList.contains("form-step-active") && 
                formStep.classList.remove("form-step-active");
            });
            formSteps[formStepsNum].classList.add("form-step-active")
        }
        function updateProgress(){
            progressStep.forEach((progressS, idx) => {
                if(idx< formStepsNum + 1){
                    progressS.classList.add("progress-step-active");
                }else{
                    progressS.classList.remove("progress-step-active");
                }
            });
            const progressActive = document.querySelectorAll(".progress-step-active");
            progress.style.width = 
            ((progressActive.length - 1)) / ((progressStep.length - 1)) * 100 + "%";
        }

    </script>
</body>
</html>