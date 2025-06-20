const reviews= document.querySelectorAll(".review .box-container .box")
var counter1=0

function leftrev(){
    if (counter1==0){
        counter1=reviews.length / 3-1
    }else{
        counter1--
    }
        scroll1()

}

function rightrev(){
    if (counter1==reviews.length / 3-1){
        counter1=0
    }else{
        counter1++
    }
        scroll1()
}

function scroll1(){
    reviews.forEach(function(item){
                item.style.transform = `translateX(-${counter1 * 1250}px)`
    }) 
}
