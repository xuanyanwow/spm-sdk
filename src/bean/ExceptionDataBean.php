<?php
/**
 * Created by PhpStorm.
 * User: Siam
 * Date: 2019/11/25
 * Time: 16:26
 */

namespace spm\bean;


use EasySwoole\Spl\SplBean;

class ExceptionDataBean extends SplBean
{
    protected $project_id;
    protected $ab_class;
    protected $ab_date;
    protected $ab_data;
    protected $ab_file;
    protected $ab_line;
    protected $ab_stack;
    protected $ab_fileresources;
    protected $ab_message;

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * @param mixed $project_id
     */
    public function setProjectId(int $project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * @return mixed
     */
    public function getAbClass()
    {
        return $this->ab_class;
    }

    /**
     * @param mixed $ab_class
     */
    public function setAbClass($ab_class)
    {
        $this->ab_class = $ab_class;
    }

    /**
     * @return mixed
     */
    public function getAbDate()
    {
        return $this->ab_date;
    }

    /**
     * @param mixed $ab_date
     */
    public function setAbDate(string $ab_date)
    {
        $this->ab_date = $ab_date;
    }

    /**
     * @return mixed
     */
    public function getAbData()
    {
        return $this->ab_data;
    }

    /**
     * @param mixed $ab_data
     */
    public function setAbData(array $ab_data)
    {
        $this->ab_data = json_encode($ab_data,256);
    }

    /**
     * @return mixed
     */
    public function getAbFile()
    {
        return $this->ab_file;
    }

    /**
     * @param mixed $ab_file
     */
    public function setAbFile(string $ab_file)
    {
        $this->ab_file = $ab_file;
    }

    /**
     * @return mixed
     */
    public function getAbLine()
    {
        return $this->ab_line;
    }

    /**
     * @param mixed $ab_line
     */
    public function setAbLine($ab_line)
    {
        $this->ab_line = $ab_line;
    }

    /**
     * @return mixed
     */
    public function getAbStack()
    {
        return $this->ab_stack;
    }

    /**
     * @param mixed $ab_stack
     */
    public function setAbStack(array $ab_stack)
    {
        $this->ab_stack = json_encode($ab_stack,256);
    }

    /**
     * @return mixed
     */
    public function getAbFileresources()
    {
        return $this->ab_fileresources;
    }

    /**
     * @param mixed $ab_fileresources
     */
    public function setAbFileresources(array $ab_fileresources)
    {
        $this->ab_fileresources = json_encode($ab_fileresources,256);
    }

    /**
     * @return mixed
     */
    public function getAbMessage()
    {
        return $this->ab_message;
    }

    /**
     * @param mixed $ab_message
     */
    public function setAbMessage(string $ab_message)
    {
        $this->ab_message = $ab_message;
    }


}