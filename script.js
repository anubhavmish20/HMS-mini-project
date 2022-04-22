'use strict'

//the entry and deletion form variables
const entryBox = document.querySelector('.doc-entry-box')
const deleteBox = document.querySelector('.doc-delete-box')
const displayBox = document.querySelectorAll('.doc-display-box')

//form selection buttons
const docEntryBtn = document.querySelector('.doc-insert')
const docDeleteBtn = document.querySelector('.doc-delete')
const docDispBtn = document.querySelector('.doc-display')

//hide functions
const showIns = function () {
    entryBox.classList.remove('hidden')
    deleteBox.classList.add('hidden')
    for (let ele of displayBox) {
        ele.classList.add('hidden')
    }
}

const showDel = function () {
    entryBox.classList.add('hidden')
    deleteBox.classList.remove('hidden')
    for (let ele of displayBox) {
        ele.classList.add('hidden')
    }
}

const showDisp = function () {
    entryBox.classList.add('hidden')
    deleteBox.classList.add('hidden')
    for (let ele of displayBox) {
        ele.classList.remove('hidden')
    }
    console.log('Clicked')
}

//event listeners
docEntryBtn.addEventListener('click', showIns)

docDeleteBtn.addEventListener('click', showDel)

docDispBtn.addEventListener('click', showDisp)
