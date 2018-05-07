<div class="col-sm-3 col-md-3">
    <div class="right-title">
        <h3>文章排行</h3>
        <span>TOP ARTICLES</span>
    </div>

    <div class="right-content">
        <ul>
            <volist name="result['rankNews']" id="vo" key="k">
                <li class="num{$k} curr">
                    <a target="_blank" href="/">{$vo.small_title}</a>
                    <if condition="$k eq 1">
                        <div class="intro">
                            {$vo.description}
                        </div>
                    </if>
                </li>
            </volist>
        </ul>
    </div>
    <volist name="result['advNews']" id="vo" key="k">
        <div class="right-hot">
            <a target="_blank" href=""><img src="" alt=""></a>
        </div>
    </volist>
</div>