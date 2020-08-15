const box = document.querySelector( '.box' );
const box2 = document.querySelector( '.box-2' );
const containers = document.querySelectorAll( '.box-content' );
const boxItems = document.querySelectorAll( '.box-item' );
const icons = document.querySelectorAll( '.box-item-link-icon' );

const refs = {
    box1: document.querySelector( '.js-box-1' ),
    box2: document.querySelector( '.js-box-2' ),
    box3: document.querySelector( '.js-box-3' ),
    box4: document.querySelector( '.js-box-4' ),
    box7: document.querySelector( '.js-box-bonus' ),

}

refs.box1.addEventListener( 'click', openContent );
refs.box2.addEventListener( 'click', openContent );
refs.box3.addEventListener( 'click', openContent );
refs.box4.addEventListener( 'click', openContent );
refs.box7.addEventListener( 'click', openContent );


function openContent( e ) {
    const links = e.target.dataset.links;

    

    containers.forEach( container => {
        if ( links === container.id ) {
            if (container.classList.contains('hidden')) {


            container.classList.remove( 'hidden' );

            activBox( container.id );
            arrowActiv( container.id );

            
        } else {
            // activBox( container.id );
            arrowActiv( container.id );
            closeBox(links , container.id);
        }

        } else {

            container.classList.add( 'hidden' );


        }

    } );

}

function closeBox(link, id) {


        containers.forEach( container => {
            if(link === id) {
                container.classList.add( 'hidden' );
                // container.classList.remove( 'box-item-activ' );
            }
        });

}

function activBox( id ) {
    boxItems.forEach( item => {
        if ( id == item.dataset.links ) {
            if (item.classList.contains('box-item-activ') ) {
                item.classList.remove( 'box-item-activ' );
            } else {
                item.classList.add( 'box-item-activ' );
            }
            
        } else {
            item.classList.remove( 'box-item-activ' );
        }
    } )
}

function arrowActiv( id ) {
    icons.forEach( item => {
        if ( id == item.dataset.links ) {
             if (item.classList.contains('box-item-link-icon-activ') ) {
                item.classList.remove( 'box-item-link-icon-activ' );
            } else {
                item.classList.add( 'box-item-link-icon-activ' );
            }
        } else {
            item.classList.remove( 'box-item-link-icon-activ' );
        }
    } )
}