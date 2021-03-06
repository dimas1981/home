<div class="content">
    <div class="ym-column user-info-parent-block">
            <div class="ym-grid user-name-box">{firstname} {lastname}</div>
            <div class="ym-col1 photo-box">
                <div class="ym-cbox">
                    <img style="max-height: 227px; max-width: 191px;" src="{photo}" alt=""/>
                </div>
                <form action="/post" method="POST" class="send_image" enctype="multipart/form-data">
                    <input type="hidden" name="addimage" value="<?php echo $this->session->userdata('user_id'); ?>">
                    <input style="display: none" name="uploadimage" id="uploadimage" type="file" />
                </form>
                <a href="#" class="change-photo-link">Change a photo</a>
                <a href="/<?php echo $this->session->userdata('user_id'); ?>/edit" class="ym-button ym-edit edit-profile-button">Edit</a>
            </div>
                <?php if($gender == 'm'):?>
            <div class="ym-col4 user-info-box user-info-box-man">
                <p class="box info">
                    <span class="user-info-list">Region:
                        <span class="user-info-list-data">{region}</span>
                    </span>
                    <span class="user-info-list">Birthday:
                        <span class="user-info-list-data">{bdate}</span>
                    </span>
                    <span class="user-info-list">Marital status:
                        <span class="user-info-list-data">{marital}</span>
                    </span>
                    <span class="user-info-list">Body type:
                        <span class="user-info-list-data">{bodytype}</span>
                    </span>
                   </p>
            </div>
                <?php else: ?>
            <div class="ym-col4 user-info-box user-info-box-woman">
                <p class="box info">
                    <span class="user-info-list">Region:
                        <span class="user-info-list-data">{region}</span>
                    </span>
                    <span class="user-info-list">Birthday:
                        <span class="user-info-list-data">{bdate}</span>
                    </span>
                    <span class="user-info-list">Marital status:
                        <span class="user-info-list-data">{marital}</span>
                    </span>
                    <span class="user-info-list">Breast:
                        <span class="user-info-list-data">{breast}</span>
                    </span>
                    <span class="user-info-list">Waist:
                        <span class="user-info-list-data">{waist}</span>
                    </span>
                    <span class="user-info-list">Hips:
                        <span class="user-info-list-data">{hips}</span>
                    </span>
                   </p>
            </div>
                <?php endif; ?>
    </div>
</div>
