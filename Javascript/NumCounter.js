const myNum = document.querySelectorAll('.statNum')

let speed = 1;

myNum.forEach((myCount) => {

    let target_count = myCount.dataset.count;
    let init_count = +myCount.innerText;

    let new_increment_num = Math.floor( target_count / speed)

    const updateNumber = () => {
        init_count = init_count + speed;
        myCount.innerText = init_count + '%';

        if(init_count < target_count){
            setTimeout(() => {updateNumber()}, 30)
        }
    }

    updateNumber();
})