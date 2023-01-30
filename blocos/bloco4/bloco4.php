<style>
    body{
        font-size: 3.4vh;
        padding: 0;
        margin: 0;
    }
    section, div{
        border: 2px solid black;
    }
    .section4{
        padding: 0% 3.7%;
        display: flex;
        flex-direction: column;
    }
    .menu-bloco4 {
        display: flex;
    }
    .item{
        width: 50%;   
    }
    .menu-principal-bloco4{
        display: flex;
        align-items: center;
        gap: 5%;
    }
    .view-more{
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }
    .itens-menu-bloco4{
        font-size: 2.8vh;
        border:none;
        background: none;
        cursor: pointer;
    }
    .painel{
        display:flex;
    }
    /* .painel-pt1{
        display:flex;
        flex-direction: row;
        justify-content: space-between;
    } */
    .itens-painel{
        border: 2px solid black;
        width: 35vh;
        height: 35vh;
        display: flex;
    }
</style>
<section class="section4">
    <div class="menu-bloco4">
        <div class="menu-principal-bloco4 item">
            <button class="itens-menu-bloco4">item1</button>
            <button class="itens-menu-bloco4">item2</button>
            <button class="itens-menu-bloco4">item3</button>
            <button class="itens-menu-bloco4">item4</button>
            <button class="itens-menu-bloco4">item5</button>
        </div>
        <div class="view-more item">view more</div>
    </div>
    <div>
        <div class="painel">
            <!-- <div class="painel-pt1">
                <div class="itens-painel"></div>
                <div class="itens-painel"></div>
                <div class="itens-painel"></div>
                <div class="itens-painel"></div>
            </div>
            <div class="middle-painel"></div>
            <div class="painel-pt1">
                <div class="itens-painel"></div>
                <div class="itens-painel"></div>
                <div class="itens-painel"></div>
                <div class="itens-painel"></div>
            </div> -->
            <div class="painel-pt1">
                <div class="itens-painel"></div>
                <div class="itens-painel"></div>
            </div>
            <div class="painel-pt1">
                <div class="itens-painel"></div>
                <div class="itens-painel"></div>
            </div>
            <div class="painel-pt1">
                <div class="itens-painel"></div>
                <div class="itens-painel"></div>
            </div>
            <div class="painel-pt1">
                <div class="itens-painel"></div>
                <div class="itens-painel"></div>
            </div>
        </div>
    </div>
</section>