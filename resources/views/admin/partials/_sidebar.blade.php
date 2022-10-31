<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Fund<span>bucks</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">أساسي</li>
            <li class="nav-item">
                <a href="dashboard.html" class="nav-link">
                    <i class="link-icon" data-feather="archive"></i>
                    <span class="link-title">الرئيسية</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">الإحصائيات</span>
                </a>
            </li>
            <li class="nav-item nav-category">لوحة التحكم</li>
            <li class="nav-item">
                <a href="{{ route('plans.index')  }}" class="nav-link">
                    <i class="link-icon" data-feather="hard-drive"></i>
                    <span class="link-title">إدارة العضويات</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">إدارة المستخدمين</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="compass"></i>
                    <span class="link-title">إدارة الدول</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="codesandbox"></i>
                    <span class="link-title">أنواع الأصول</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="dribbble"></i>
                    <span class="link-title">أنواع العوائد</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="dollar-sign"></i>
                    <span class="link-title">إدارة العملات</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#notifications" role="button" aria-expanded="false" aria-controls="notifications">
                    <i class="link-icon" data-feather="bell"></i>
                    <span class="link-title">الإشعارات</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="notifications">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">قوالب الإشعارات</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">إرسال إشعار</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">رسائل البريد الإلكتروني</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">قوالب البريد الإلكتروني</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">إرسال بريد إلكتروني</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="flag"></i>
                    <span class="link-title">إدارة بطاقات الدعم</span>
                </a>
            </li>


            <li class="nav-item nav-category">المعاملات</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#deposits" role="button" aria-expanded="false" aria-controls="deposits">
                    <i class="link-icon" data-feather="credit-card"></i>
                    <span class="link-title">الإيداع</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="deposits">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">طرق الإيداع</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">الودائع</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#withdraws" role="button" aria-expanded="false" aria-controls="withdraws">
                    <i class="link-icon" data-feather="server"></i>
                    <span class="link-title">السحب</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="withdraws">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">طرق السحب</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">طلبات السحب</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="list"></i>
                    <span class="link-title">المعاملات</span>
                </a>
            </li>


            <li class="nav-item nav-category">الصلاحيات</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="package"></i>
                    <span class="link-title">إدارة الأدوار</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">إدارة الأدمين</span>
                </a>
            </li>


            <li class="nav-item nav-category">الإعدادات</li>
            <li class="nav-item">
                <a href="#" target="_blank" class="nav-link">
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">إدارة صفحات الموقع</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#withdraws" role="button" aria-expanded="false" aria-controls="withdraws">
                    <i class="link-icon" data-feather="server"></i>
                    <span class="link-title">الإعدادات العامة</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="withdraws">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">إعدادات الموقع</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">إعدادات التطبيق</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">سايدبار:</h6>
        <div class="mb-3 pb-3 border-bottom">
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
                <label class="form-check-label" for="sidebarLight">
                    الوضع الفاتح
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
                <label class="form-check-label" for="sidebarDark">
                    الوضع المظلم
                </label>
            </div>
        </div>
    </div>
</nav>
