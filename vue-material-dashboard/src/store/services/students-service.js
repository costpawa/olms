import axios from 'axios';
import Jsona from 'jsona';

const url = process.env.VUE_APP_API_BASE_URL;
const jsona = new Jsona();

function add(student) {
  const payload = jsona.serialize({
    stuff: student,
    includeNames: null
  });

  const options = {
    headers: {
      'Accept': 'application/vnd.api+json',
      'Content-Type': 'application/vnd.api+json',
    }
  };

  return axios.post(`${url}/students`, payload, options)
      .then(response => {
        return jsona.deserialize(response.data);
      });
}

export default {
  add
};
