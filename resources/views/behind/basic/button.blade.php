<div class="row">
    <div class="col-lg-12">
        <a href="/admin.php?c=basic">
            <button type="button" class="btn <if condition='$type eq 1'>btn-primary</if>">
                基本配置
            </button>
        </a>
        <a href="/admin.php?c=basic&a=cache">
            <button type="button" class="btn <if condition='$type eq 2'>btn-primary</if>">
                缓存配置
            </button>
        </a>
    </div>
</div>