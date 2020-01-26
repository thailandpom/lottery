<?php
defined('BASEPATH') or exit('No direct script access allowed');

class setting extends CI_Controller
{

    public function setting_main()
    {
        // $query = $this->db->query("SELECT * FROM  setting ORDER BY 'desc'");
        $order = $this->db->from("setting")->order_by("setting.created_at desc")->get();
        $query = $this->db->from("setting")->order_by("setting.created_at desc")->get();
        $data['settings'] = $query->result();
        $data['orders'] = $order->row();
        $this->load->view('layouts/header');
        $this->load->view('setting/setting-main', $data);
        $this->load->view('layouts/footer');
    }
    public function setting_create()
    {
        $this->load->view('layouts/header');
        $this->load->view('setting/setting-create');
        $this->load->view('layouts/footer');

    }

    public function setting_insert()
    {
        date_default_timezone_set('Asia/Bangkok');
        $date = date('Y-m-d H:i:s');
        $select_time = $this->input->post("datetime");
        if ($select_time >= $date) {
            $data = array(
                "amount" => $this->input->post("amount"),
                "dateP" => $this->input->post("dateP"),
                "public_time" => $this->input->post("datetime"),
                "status" => '1',
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            );
        } else {
            $data = array(
                "amount" => $this->input->post("amount"),
                "dateP" => $this->input->post("dateP"),
                "public_time" => $this->input->post("datetime"),
                "status" => '0',
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            );
        }
        $this->db->insert('setting', $data);
        $setting_id = $this->db->insert_id();
        $data2 = array(
            "s_id" => $setting_id,
        );
        $this->db->insert('setting_result', $data2);

        redirect('setting/setting_main');

    }

    public function setting_edit($id)
    {
        $query = $this->db->query("SELECT * FROM  setting WHERE id = '$id'");
        if ($query->num_rows() > 0) {
            $data['settings'] = $query->row();
            $this->load->view('layouts/header');
            $this->load->view('setting/setting-edit', $data);
            $this->load->view('layouts/footer');
        }
    }

    public function update()
    {
        date_default_timezone_set('Asia/Bangkok');
        $id = $this->input->post("id");
        $date = date('Y-m-d H:i:s');
        $select_time = $this->input->post("datetime");
        if ($select_time >= $date) {
            $update = array(
                "amount" => $this->input->post("amount"),
                "dateP" => $this->input->post("dateP"),
                "public_time" => $this->input->post("datetime"),
                "status" => '1',
            );
        } else {
            $update = array(
                "amount" => $this->input->post("amount"),
                "dateP" => $this->input->post("dateP"),
                "public_time" => $this->input->post("datetime"),
                "status" => '0',
            );
        }
        $this->db->update('setting', $update, array('id' => $id));
        redirect('setting/setting_main');

    }

    public function setting_result($id)
    {
        $order = $this->db->query("SELECT * FROM  setting WHERE id = '$id'");
        $query = $this->db->query("SELECT * FROM  setting_result WHERE id = '$id'");
        if ($query->num_rows() > 0) {
            $data['settings'] = $query->row();
            $data['orders'] = $order->row();
            $this->load->view('layouts/header');
            $this->load->view('setting/setting-result', $data);
            $this->load->view('layouts/footer');
        }
    }

    public function result_update()
    {
        $s_id = $this->input->post("id");

        $Threetop = substr($this->input->post("award1"), 3);
        $Threetod = substr($this->input->post("award1"), 3);
        $twotop = substr($this->input->post("award1"), 4);
        $twobottom = $this->input->post("two");
        $runtop = substr($this->input->post("award1"), 4);
        $runbottom = $this->input->post("two");

        $tod1 = substr($Threetod, 0, 1);
        $tod2 = substr($Threetod, 1, 1);
        $tod3 = substr($Threetod, 2);

        $runtop1 = substr($runtop, 0, 1);
        $runtop2 = substr($runtop, 1);

        $runbottom1 = substr($runbottom, 0, 1);
        $runbottom2 = substr($runbottom, 1);

        $update_sets = array(
            "status_receive" => '1',
        );
        $this->db->update('setting', $update_sets, array('id' => $s_id));

        $update = array(
            "award1" => $this->input->post("award1"),
            "beforeThree1" => $this->input->post("beforeThree1"),
            "beforeThree2" => $this->input->post("beforeThree2"),
            "afterThree1" => $this->input->post("afterThree1"),
            "afterThree2" => $this->input->post("afterThree2"),
            "two" => $this->input->post("two"),
        );
        $this->db->update('setting_result', $update, array('s_id' => $s_id));

        $order = $this->db->from("tb_order")
            ->join('tb_order_detail as od', 'tb_order.id = od.order_id')
            ->where("tb_order.s_id = '$s_id'")
            ->where("od.status = '0'")
            ->get();
        if ($order->num_rows() > 0) {
            $data = $order->result();
            foreach ($data as $val) {
                if ($val->s_id == $s_id) {
                    if ($val->type == 1) {
                        if ($val->number == $Threetop) {
                            $update = array(
                                "amount_received" => $val->perPrice * $val->price,
                                "status" => '1',
                            );
                        } else {
                            $update = array(
                                "status" => '1',
                            );
                        }
                        $this->db->update('tb_order_detail', $update, array('s_id' => $s_id, 'id' => $val->id));
                    }
                    if ($val->type == 2) {
                        if (
                            ($val->number == $tod1 . $tod2 . $tod3) || ($val->number == $tod1 . $tod3 . $tod2)
                            || ($val->number == $tod2 . $tod1 . $tod3) || ($val->number == $tod2 . $tod3 . $tod1)
                            || ($val->number == $tod3 . $tod1 . $tod2) || ($val->number == $tod3 . $tod2 . $tod1)
                        ) {
                            $update = array(
                                "amount_received" => $val->perPrice * $val->price,
                                "status" => '1',
                            );
                        } else {
                            $update = array(
                                "status" => '1',
                            );
                        }
                        $this->db->update('tb_order_detail', $update, array('s_id' => $s_id, 'id' => $val->id));
                    }
                    if ($val->type == 3) {
                        if ($val->number == $twotop) {
                            $update = array(
                                "amount_received" => $val->perPrice * $val->price,
                                "status" => '1',
                            );
                        } else {
                            $update = array(
                                "status" => '1',
                            );
                        }
                        $this->db->update('tb_order_detail', $update, array('s_id' => $s_id, 'id' => $val->id));
                    }
                    if ($val->type == 4) {
                        if ($val->number == $twobottom) {
                            $update = array(
                                "amount_received" => $val->perPrice * $val->price,
                                "status" => '1',
                            );
                        } else {
                            $update = array(
                                "status" => '1',
                            );
                        }
                        $this->db->update('tb_order_detail', $update, array('s_id' => $s_id, 'id' => $val->id));
                    }
                    if ($val->type == 5) {
                        if (($val->number == $runtop1) || ($val->number == $runtop2)) {
                            $update = array(
                                "amount_received" => $val->perPrice * $val->price,
                                "status" => '1',
                            );
                        } else {
                            $update = array(
                                "status" => '1',
                            );
                        }
                        $this->db->update('tb_order_detail', $update, array('s_id' => $s_id, 'id' => $val->id));
                    }
                    if ($val->type == 6) {
                        if (($val->number == $runbottom1) || ($val->number == $runbottom2)) {
                            $update = array(
                                "amount_received" => $val->perPrice * $val->price,
                                "status" => '1',
                            );
                        } else {
                            $update = array(
                                "status" => '1',
                            );
                        }
                        $this->db->update('tb_order_detail', $update, array('s_id' => $s_id, 'id' => $val->id));
                    }
                }
            }
        }


        $orders = $this->db->from("tb_order")->get();
        $data5 = $orders->result();
        foreach ($data5 as $od) {
            $this->db->select_sum('amount_received')->where('order_id', $od->id);
            $query = $this->db->get('tb_order_detail');
            $money = $this->db->from("tb_money")->get();
            if ($query->num_rows() > 0) {
                $data2 = $query->result();
                foreach ($data2 as $v) {
                    $update_received = array(
                        "received" => $v->amount_received,
                    );
                    $this->db->update('tb_order', $update_received, array('id' => $od->id));
                }
            }
        }

        $money = $this->db->from("tb_money")->get();
        $sum2 = 0;
        if ($money->num_rows() > 0) {
            $data4 = $money->result();
            foreach ($data4 as $val4) {
              $this->db->select_sum('received')->where('u_id', $val4->u_id);
              $query = $this->db->get('tb_order');
              if ($query->num_rows() > 0) {
                $data2 = $query->result();
                foreach ($data2 as $v) {
                  $update_received = array(
                      "amount" => $v->received,
                  );
                  $this->db->update('tb_money', $update_received, array('u_id' => $val4->u_id));
              }
            }
          }
        }

        redirect('setting/setting_main');

    }

}
