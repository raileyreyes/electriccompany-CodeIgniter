<?php

namespace App\Controllers;

use App\Models\CustomerAccountModel;

class Dashboard extends BaseController
{
    protected $customerModel;

    public function __construct()
    {
        $this->customerModel = new CustomerAccountModel();
    }

    public function index()
    {
        if (!session()->get('logged_in')) {
        return redirect()->to('/login');
    }

        $keyword = $this->request->getGet('search');
        $status  = $this->request->getGet('status');
        $type    = $this->request->getGet('type');

        $perPage = 10;

        if ($keyword) {
            $accounts = $this->customerModel
                ->searchAccounts($keyword, $perPage);
        } elseif ($status) {
            $accounts = $this->customerModel
                ->getAccountsByStatus($status, $perPage);
        } elseif ($type) {
            $accounts = $this->customerModel
                ->getAccountsByType($type, $perPage);
        } else {
            $accounts = $this->customerModel
                ->getAccountsPaginated($perPage);
        }

        $data = [
            'accounts'           => $accounts,
            'pager'              => $this->customerModel->pager,
            'total_accounts'     => $this->customerModel->getTotalAccounts(),
            'active_accounts'    => $this->customerModel->getCountByStatus('active'),
            'inactive_accounts'  => $this->customerModel->getCountByStatus('inactive'),
            'suspended_accounts' => $this->customerModel->getCountByStatus('suspended'),
            'current_page'       => $this->request->getGet('page') ?? 1,
            'search_keyword'     => $keyword,
            'filter_status'      => $status,
            'filter_type'        => $type,
        ];

        return view('home/index', $data);
    }

    public function create()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('home/create');
    }

    public function store()
{
    if (!session()->get('logged_in')) {
        return redirect()->to('/login');
    }

    $data = [
        'account_number'  => $this->request->getPost('account_number'),
        'customer_name'   => $this->request->getPost('customer_name'),
        'address'         => $this->request->getPost('address'),
        'phone'           => $this->request->getPost('phone'),
        'email'           => $this->request->getPost('email'),
        'meter_number'    => $this->request->getPost('meter_number'),
        'connection_type' => $this->request->getPost('connection_type'),
        'status'          => $this->request->getPost('status'),
    ];

    $this->customerModel->insert($data);

    return redirect()->to('/dashboard');
}

}