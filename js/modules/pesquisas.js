export default function FilterByTag(){
    const filtroTag = document.querySelectorAll('[data-tag]') // botões com as tags
    const filtroTagged = document.querySelectorAll('[data-tagged]') // pesquisas com as tags
    const tagForAll = document.querySelectorAll('[data-tag-all]')
    const allSearchs = document.querySelectorAll('.pesquisas-content-item')

    allSearchs.forEach(e => e.classList.add('active')) // iniciar com todas ativas

    filtroTag.forEach(e => { 
        e.addEventListener('click', function () {
            allSearchs.forEach(e => e.classList.remove('active'))

            let taggedSearch = Array.prototype.filter.call(filtroTagged, (n => n.dataset.tagged === e.dataset.tag)) // seleciona apenas os que tem a tag
            taggedSearch.forEach(e => {
                e.parentElement.parentElement.parentElement.classList.toggle('active') // adiciona ativo somente nas que possuem a tag
            })
        })
    })

    tagForAll.forEach(e => {
        e.addEventListener('click', function() {
            allSearchs.forEach(e => e.classList.add('active'))
        })
    })
}