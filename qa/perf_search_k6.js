import http from 'k6/http';
import { sleep, check } from 'k6';

export const options = {
  vus: 25,
  duration: '3m',
  thresholds: {
    http_req_failed: ['rate<0.01'],
    http_req_duration: ['p(95)<1000'],
  },
};

const BASE_URL = 'http://localhost/qrbook';

export default function () {
  const res = http.get(${BASE_URL}/search?q=python);
  check(res, { 'status is 200': (r) => r.status === 200 });
  sleep(1);
}
