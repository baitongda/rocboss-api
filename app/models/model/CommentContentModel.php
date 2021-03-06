<?php
namespace model;

/**
 * CommentContentModel
 * @author ROC <i@rocs.me>
 */
class CommentContentModel extends Model
{
    // The table name.
    const TABLE = 'rocboss_comment_content';
    
    // Columns the model expects to exist
    const COLUMNS = ['id', 'comment_id', 'user_id', 'type', 'content', 'sort', 'created_at', 'updated_at', 'is_deleted'];

    // List of columns which have a default value or are nullable
    const OPTIONAL_COLUMNS = ['created_at'];

    // Primary Key
    const PRIMARY_KEY = ['id'];

    // List of columns to receive the current timestamp automatically
    const STAMP_COLUMNS = [
        'updated_at' => 'datetime',
    ];

    // It defines the column affected by the soft delete
    const SOFT_DELETE = 'is_deleted';
}
