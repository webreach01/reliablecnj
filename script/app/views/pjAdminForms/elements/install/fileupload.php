&lt;input type="file" name="pjCF_field_<?php echo $v['id'];?><?php echo $v['allow_mulitple'] == 'T' ? '[]' : null;?>" class="pjCF-form-field" <?php echo $v['allow_mulitple'] == 'T' ? 'multiple="multiple"' : null;?> lang=<?php echo $v['max_file_size']; ?>/&gt;