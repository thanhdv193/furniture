<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question_answers".
 *
 * @property string $answer_id
 * @property string $question_id
 * @property string $answer
 * @property integer $create_date
 */
class QuestionAnswers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question_answers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question_id', 'create_date'], 'required'],
            [['question_id', 'create_date'], 'integer'],
            [['answer'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'answer_id' => 'Answer ID',
            'question_id' => 'Question ID',
            'answer' => 'Answer',
            'create_date' => 'Create Date',
        ];
    }
}
