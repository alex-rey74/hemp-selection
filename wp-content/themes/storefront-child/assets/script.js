class ClassWatcher {

    constructor(targetNode, classToWatch, classAddedCallback, classRemovedCallback) {
        this.targetNode = targetNode
        this.classToWatch = classToWatch
        this.classAddedCallback = classAddedCallback
        this.classRemovedCallback = classRemovedCallback
        this.observer = null
        this.lastClassState = targetNode.classList.contains(this.classToWatch)

        this.init()
    }

    init() {
        this.observer = new MutationObserver(this.mutationCallback)
        this.observe()
    }

    observe() {
        this.observer.observe(this.targetNode, { attributes: true })
    }

    disconnect() {
        this.observer.disconnect()
    }

    mutationCallback = mutationsList => {
        for(let mutation of mutationsList) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                let currentClassState = mutation.target.classList.contains(this.classToWatch)
                if(this.lastClassState !== currentClassState) {
                    this.lastClassState = currentClassState
                    if(currentClassState) {
                        this.classAddedCallback()
                    }
                    else {
                        this.classRemovedCallback()
                    }
                }
            }
        }
    }
}
AOS.init();
let flag = false;

let callbackStickyAdd = () => {
    if(!flag){
        let menuBar = document.querySelector('.nav-menu');
        let li = document.createElement('li');
        let p = document.createElement('img');

        li.className = "logo-float";

        p.src = "http://hemp-selection/wp-content/uploads/2021/03/logo-sans-titre-sans-fond-mini.png";
        p.alt = "Logo Hemp Selection";
        p.className = "logo-sticky";

        li.appendChild(p);
        menuBar.prepend(li)
        flag = true;
    }
}

let callbackStickyRmv = () => {
    if(flag){
        document.querySelector('.logo-sticky').remove();
        flag = false;
    }
}

/*
setTimeout(() => {
    let target = document.querySelector('.element-is-not-sticky');
    let classWatcher = new ClassWatcher(target, 'element-is-sticky', callbackStickyAdd, callbackStickyRmv);
}, 200);
*/