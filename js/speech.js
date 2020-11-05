    $(document).ready(function(){
    $(".hamburger .fas").click(function(){
    $(".wrapper").addClass("active")
})

$(".wrapper .sidebar .close").click(function(){
    $(".wrapper").removeClass("active")
})
    })
    
function textToSpeech()
{
   const speech = new SpeechSynthesisUtterance();
    let voices = speechSynthesis.getVoices();
    let convert = document.getElementById("text").innerHTML;

    speech.text = convert;
   
    speech.volume = 1;
    speech.rate = 1;
    speech.pitch = 1;
   
    speech.voice = voices[1];
   
    speechSynthesis.speak(speech);
}


function pause()
{
    speechSynthesis.pause();
}


function stop()
{
    speechSynthesis.cancel();
}

function resume()
{
    speechSynthesis.resume();
}

speakBtn.addEventListener('click', textToSpeech);
pauseBtn.addEventListener('click', pause);
resumeBtn.addEventListener('click', resume);
cancelBtn.addEventListener('click', stop);






