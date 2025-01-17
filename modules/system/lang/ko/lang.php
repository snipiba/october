<?php return [
  'app' => [
    'name' => 'October CMS',
    'tagline' => '기본으로 돌아가기',
  ],
  'directory' => [
    'create_fail' => '디렉토리 \':name\'을 작성할 수 없습니다.',
  ],
  'file' => [
    'create_fail' => '파일 \':name\'을 작성할 수 없습니다.',
  ],
  'page' => [
    'invalid_token' => [
      'label' => '잘못된 보안 토큰',
    ],
  ],
  'combiner' => [
    'not_found' => 'combiner파일 \':name\'을 발견할 수 없습니다.',
  ],
  'system' => [
    'name' => '시스템',
    'menu_label' => '시스템',
    'categories' => [
      'cms' => 'CMS',
      'misc' => '기타',
      'logs' => '로그',
      'mail' => '메일',
      'shop' => '샵',
      'team' => '팀',
      'users' => '유저',
      'system' => '시스템',
      'social' => '소셜',
      'events' => '이벤트',
      'customers' => '고객',
      'my_settings' => '내 설정',
    ],
  ],
  'theme' => [
    'label' => '테마',
    'unnamed' => '이름없는 테마',
    'name' => [],
  ],
  'themes' => [
    'install' => '테마 설치',
    'installed' => '설치된 테마',
    'no_themes' => '마켓에서 설치된 테마가 없습니다.',
    'recommended' => '추천',
    'remove_confirm' => '이 테마를 삭제하시겠습니까?',
  ],
  'plugin' => [
    'label' => '플러그인',
    'unnamed' => '이름없는 플러그인',
    'name' => [],
    'by_author' => 'By :name',
  ],
  'plugins' => [
    'enable_or_disable' => '활성화/비활성화',
    'enable_or_disable_title' => '플러그인 활성화/비활성화',
    'install' => '플러그인 설치',
    'install_products' => '제품 설치',
    'installed' => '설치된 플러그인',
    'no_plugins' => '마켓에서 설치된 플러그인이 없습니다.',
    'recommended' => '추천',
    'remove' => '삭제',
    'refresh' => '새로고침',
    'disabled_label' => '비활성화',
    'disabled_help' => '플러그인을 비활성화하면 애플리케이션에서 사용할수 없게됩니다.',
    'frozen_label' => '업데이트 동결',
    'frozen_help' => '동결된 플러그인은 업데이트 과정중에 무시됩니다.',
    'selected_amount' => '플러그인을 :amount개 선택',
    'remove_confirm' => '이 플러그인을 삭제하시겠습니까?',
    'remove_success' => '시스템에서 플러그인을 삭제했습니다.',
    'refresh_success' => '시스템에 설치된 플러그인을 변경했습니다.',
    'disable_confirm' => '비활성화하시겠습니까?',
    'disable_success' => '플러그인을 비활성화 했습니다.',
    'enable_success' => '플러그인을 활성화했습니다.',
  ],
  'project' => [
    'attach' => '프로젝트 연결',
    'detach' => '프로젝트 분리',
    'none' => '없음',
    'id' => [
      'missing' => '사용하실 프로젝트 ID를 설정해주세요.',
    ],
    'detach_confirm' => '이 프로젝트를 분리하시겠습니까?',
    'unbind_success' => '프로젝트를 분리했습니다.',
  ],
  'settings' => [
    'search' => '검색',
  ],
  'mail' => [
    'smtp_ssl' => 'SSL접속여부',
  ],
  'mail_templates' => [
    'name_comment' => '시스템상의 고유이름을 붙여주세요.',
    'test_send' => '테스트 발송',
    'test_confirm' => ':email 로 테스트메일을 발송합니다. 계속하시겠습니까?',
    'creating' => '템플릿 생성중...',
    'creating_layout' => '레이아웃 생성중...',
    'saving' => '템플릿 저장중...',
    'saving_layout' => '레이아웃 저장중...',
    'delete_confirm' => '이 템플릿을 삭제하시겠습니까?',
    'delete_layout_confirm' => '이 레이아웃을 삭제하시겠습니까?',
    'deleting' => '템플릿을 삭제중...',
    'deleting_layout' => '레이아웃을 삭제중...',
    'sending' => '테스트 메시지 전송중...',
    'return' => '템플릿 목록으로 돌아가기',
  ],
  'install' => [],
  'updates' => [
    'plugin_author' => '작성자',
    'plugin_not_found' => '플러그인을 찾을 수 없습니다',
    'core_build' => '빌드 :build',
    'core_build_help' => '새로운 빌드가 존재합니다.',
    'themes' => '테마',
    'plugin_version_none' => '최신버전',
    'plugin_current_version' => '현재버전',
    'theme_new_install' => '신규테마설치',
    'theme_extracting' => '테마 \':name\' 압축해제중입니다',
    'update_label' => 'SW 업데이트',
    'update_loading' => '업데이트 로딩중...',
    'force_label' => '강제 업데이트',
    'found' => [
      'label' => '업데이트가능',
      'help' => '업데이트 하실 SW를 클릭해주세요.',
    ],
    'none' => [
      'label' => '업데이트없음',
      'help' => '업데이트를 발견할 수 없습니다.',
    ],
    'important_action' => [
      'empty' => '선택',
      'confirm' => '업데이트',
      'skip' => '이번만 업데이트 안함',
      'ignore' => '계속 업데이트 안',
    ],
    'important_action_required' => '선택 필요',
    'important_view_guide' => '업그레이드 가이드 보기',
    'important_view_release_notes' => '릴리즈 노트 보기',
    'important_alert_text' => '몇몇 업데이트는 주의가 필요합니다.',
    'details_title' => '플러그인 상세',
    'details_view_homepage' => '홈페이지 보기',
    'details_changelog' => '변경로그',
    'details_changelog_missing' => '변경로그가 제공되지 않습니다.',
    'details_current_version' => '현재 버전',
    'details_author' => '작성자',
  ],
  'server' => [
    'connect_error' => '서버 접속 오류.',
    'response_not_found' => '갱신할 서버를 발견할 수 없습니다.',
    'response_invalid' => '서버로부터의 응답이 정상적이지 않습니다.',
    'response_empty' => '서버로부터의 응답이 없습니다.',
    'file_error' => '서버가 패키지 전송에 실패.',
    'file_corrupt' => '서버의 파일이 정상적이지 않습니다.',
  ],
  'behavior' => [
    'missing_property' => ':class 클래스는 :behavior 행동이 사용하는 :property 를 정의해야합니다.',
  ],
  'config' => [
    'not_found' => ':location 에서 :file 설정파일을 발견할 수 없습니다.',
    'required' => ':location 의 설정에 필요한 :property 값이 존재해야합니다.',
  ],
  'zip' => [
    'extract_failed' => '코어파일: \':file\' 추출에 실패했습니다.',
  ],
  'event_log' => [],
  'request_log' => [
    'empty_link' => '요청로그 비우기',
    'empty_loading' => '요청로그 비우는 중입니다...',
    'empty_success' => '요청로그를 비웠습니다.',
    'return_link' => '요청로그로 돌아가기',
    'id' => 'ID',
  ],
  'permissions' => [
    'name' => '시스템',
    'manage_system_settings' => '시스템설정 관리',
    'manage_software_updates' => 'SW업데이트 관리',
    'access_logs' => '시스템로그 보기',
    'manage_mail_templates' => '이메일 템플릿 관리',
    'manage_mail_settings' => '이메일 설정 관리',
    'manage_other_administrators' => '다른 어드민 관리',
  ],
  'log' => [],
  'media' => [
    'invalid_path' => '잘못된 경로: \':path\'.',
    'folder_size_items' => '갯수',
  ],
];
