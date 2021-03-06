<?php

namespace  WizPack\Workflow\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WorkflowApprovedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $workflow;
    public $approvedStep;
    public $approvalInfo;
    public $url;
    public $text;
    public $model_id;
    public $previewUrl;

    /**
     * Create a new message instance.
     *
     * @param $workflow
     * @param $approvedStep
     * @param $approvalInfo
     * @param $model_id
     */
    public function __construct($workflow, $approvedStep, $approvalInfo, $model_id)
    {
        $this->workflow = $workflow;
        $this->approvedStep = $approvedStep;
        $this->approvalInfo = $approvalInfo;
        $this->url = 'upesi/approvals/'.$workflow['id'];
        $this->text = 'View approval';
        $this->model_id = $model_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = "Approval request: #". $this->workflow['id'].' '.$this->workflow['name'];

        return $this->subject($subject)->view('wizpack::emails.workflow-step-approved');
    }
}
