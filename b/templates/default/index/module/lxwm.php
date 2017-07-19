{*<?php exit();?>*}

    <section class="productlist_logo main">
        <p>遇见不凡，源自百年酿造</p>
        <p>COME ACROSS</p>
    </section>
<section class="main productlist_content productlist_Center">
        <div class="left">
            <h1>CONTACT US</h1>
            <h3>{$lang.contact}</h3>
        </div>
        <div class="right"><span>您的位置：<a href="index.html">首页</a>>><a href="#">联系我们</a></span></div>
        <div class="clear"></div>
        <div class="block" id="contact">
            <div class="head">
            </div>
            <div class="main">
                <p>我是老刘，从小跟爸妈在国内长大，我爸是做国际贸易的，之后一直在澳洲，我也就随之去了阿德（阿德莱德），一呆就是七年，阿德是澳洲最主要的港口城市，主要出口矿石以及其他农产品，我所学的专业是矿业专业，说起来与葡萄酒似乎没有什么联系，但是缘分说来也奇妙，在一次晚会上接触红酒，刚开始也不懂，只是自己喝，感觉和其他饮料不一样，渐渐的开始喜欢，顺带着了解，后来成了习惯，无酒不欢，尤其爱喝南澳干红，包括现在，我都认为南澳干红是最容易入门的红酒，活泼奔放的香气配上厚重的酒味，特别适合刚喝红酒的人。</p>
                <p><img src="{$S_FRONT_URL}images/relation_01.png" alt="老刘的产品"></p>
                {foreach from=$contact name=contact item=item}
                    <p style="margin:0;">{$item.word}:{$item.content}</p>
                {/foreach}
            </div>
        </div>
 </section>
